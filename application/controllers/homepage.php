<?php
class homepage extends CI_Controller {
    public function index(){
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilqis Putri Yanda Personal Website</title>
</head>

<body>
    <hr />

    <header style="text-align: center;">
        <h1>Bilqis Putri Yanda</h1>
    </header>
    <hr />

<article style="text-align: center;">
    <h2>ABOUT ME</h2>
    <p>
    Hello everyone, let me to introduce ma self 
My name is Bilqis Putri Yanda, that’s the name my parents give to the baby born on august 22 2005, I was the first child and I have one brother, I’m born and lived on Betawi sunda etchic family, my hobbies is singing, I love art because art is part of my life, I can enjoyed it, I little bit can use English and Japanese language because my major in last school is language.

    </p>
</article>

<div style="max-width: 600px; margin: 3em auto">
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>Motivasi Untuk Kuliah</th>
                <th>Keinginan setelah lulus kuliah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <ul>
                        <li>Biar dapet uang jajan wkwkwk</li>
                        <li>Ketemu temen dong</li>
                        <li>Jajannnn</li>
                    </ul>
                    </td>
                    <td>
                        <ul>
                            <li>ofc kerja di tempat yang aku mau</li>
                            <li>Bisa beli tesla *aamiin</li>
                            <li>Jadi rich aunty</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <hr>
    <footer style="text-align: center;">
        <p>Copyright &copy; 2023 Bilqis Putri Yanda</p>
    </footer>
</body>
</html>
<?php
    }
}