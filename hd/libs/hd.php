<?php
// Biến kết nối toàn cục
global $conn;

// Hàm kết nối database
function connect_db()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Nếu chưa kết nối thì thực hiện kết nối
    if (!$conn){
        $conn = mysqli_connect('localhost', 'root', '', 'demo') or die ('Can\'t not connect to database');
        // Thiết lập font chữ kết nối
        mysqli_set_charset($conn, 'utf8');
    }
}

// Hàm ngắt kết nối
function disconnect_db()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Nếu đã kêt nối thì thực hiện ngắt kết nối
    if ($conn){
        mysqli_close($conn);
    }
}

// Hàm lấy tất cả sinh viên
function get_all_hd()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Hàm kết nối
    connect_db();
    
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from ke_hoach";
    
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
    
    // Mảng chứa kết quả
    $result = array();
    
    // Lặp qua từng record và đưa vào biến kết quả
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    // Trả kết quả về
    return $result;
}

// Hàm lấy sinh viên theo ID
function get_hd($id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Hàm kết nối
    connect_db();
    
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from ke_hoach where id = {$id}";
    
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
    
    // Mảng chứa kết quả
    $result = array();
    
    // Nếu có kết quả thì đưa vào biến $result
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
    
    // Trả kết quả về
    return $result;
}

// Hàm thêm sinh viên
function add_hd($ten_hd, $bat_dau, $ket_thuc)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Hàm kết nối
    connect_db();
    
    // Chống SQL Injection
    $ten_hd = addslashes($ten_hd);
    $bat_dau = addslashes($bat_dau);
    $ket_thuc = addslashes($ket_thuc);
    
    // Câu truy vấn thêm
    $sql = "
            INSERT INTO ke_hoach(ten_hd, bat_dau, ket_thuc) VALUES
            ('$ten_hd','$bat_dau','$ket_thuc')
    ";
    
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
    
    return $query;
}


// Hàm sửa sinh viên
function edit_hd($id, $ten_hd, $bat_dau, $ket_thuc)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Hàm kết nối
    connect_db();
    
    // Chống SQL Injection
    $ten_hd = addslashes($ten_hd);
    $bat_dau = addslashes($bat_dau);
    $ket_thuc = addslashes($ket_thuc);
    
    // Câu truy sửa
    $sql = "
            UPDATE ke_hoach SET
            ten_hd = '$ten_hd',
            bat_dau = '$bat_dau',
            ket_thuc = '$ket_thuc'
            WHERE id = $id
    ";
    
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
    
    return $query;
}


// Hàm xóa sinh viên
function delete_hd($id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Hàm kết nối
    connect_db();
    
    // Câu truy sửa
    $sql = "
            DELETE FROM ke_hoach
            WHERE id = $id    
    ";
    
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
    return $query;
}