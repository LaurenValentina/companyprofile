<?php session_start();
// var_dump($_POST);
if (empty($_POST['nama'])&& empty($_POST['tempat_lahir'])
    && empty($_POST['tanggal_lahir'])&& empty($_POST['gender'])
    && empty($_POST['email'])&& empty($_POST['password']))
    {
        echo "<body>
            <script>
                alert('belum ada data')
                window.location.replace('daftar.php')
            </script>
        </body>";
    }

    $nama = $_POST['nama'];
    $tlahir = $_POST['tempat_lahir'];
    $tgllahir = $_POST['tanggal_lahir'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $pws = $_POST['password'];

    function set_cookie(){
        global $nama,$tlahir,$tgllahir,$gender,$email,$pws;
        $new = ['nama' =>  $nama,
                'tlahir'=> $tlahir,
                'tgllahir' => $tgllahir,
                'gender' => $gender,
                'email' => $email,
                'pws' => $pws];
        setcookie('user',json_encode($new));
    }
    if (isset ($_POST['simpan'])) {
        if(!empty($nama)&& !empty($tlahir) && !empty($tgllahir) && !empty($gender) && !empty($email) && !empty($pws)){
            set_cookie();
            echo "<body>
                 <script>
                    window.location.replace('submit.php')
                    </script>
                </body>";
        }else {
                echo "<body>
                 <script>
                    alert('belum ada data')
                    window.location.replace('daftar.php')
                    </script>
                </body>";
            }
    }
?>
