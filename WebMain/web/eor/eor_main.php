<html>
    <head>
        <title>EOR Images</title>
        <meta charset="UTF-8">
        <meta name="description" content="Welcome">
        <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
        <meta name="author" content="PT. Artha Samudra Kontindo">
        <link rel="stylesheet" type="text/css" href="master.css">
        <link rel="stylesheet" type="text/css" href="content.css">
        <script type="text/javascript" src="functions.js"></script>
        <script type="text/javascript" src="slider.js"></script>
    </head>
    
    <body id="mainBody">
        <div id="companyDetails">
            <table syu;e="width:530px;">
                <tr>
                    <td style="width:120px;">
                        <img src="../../interactive/logo_askon_nt.png" alt="Logo Askon" id="logo" />
                    </td>
                    <td style="width:10px;"></td>
                    <td style="width:400px;">
                        <left>
                            <p id="comName">
                                <b>PT. Artha Samudra Kontindo</b>
                            </p>
                            <br/>
                            <font id="comDesc">
                                Kawasan Industri Cipta Guna Blok 9
                                <br/>
                                Jl. Arteri Yos Sudars
                                <br/>
                                Semarang 50174
                                <br/>
                                Telp: +6224-12345678
                                <br/>
                                Fax: +6224-12345678
                            </font>
                        </left>
                    </td>
                </tr>
            </table>
            <br/>
            <table>
                <tr id="comTitle">
                    <th colspan="8">
                        <p align="left">
                            Contact Person
                        </p>
                    </th>
                </tr>
                <tr id="comDesc">
                    <td><b>1</b></td>
                    <td><b>.</b></td>
                    <td><b>Nama #1</b></td>
                    <td>(HP</td>
                    <td>: 081x-xxxx-xxxx</td>
                    <td>, email</td>
                    <td>: asdf@tes.com</td>
                    <td>)</td>
                </tr>
                <tr id="comDesc">
                    <td><b>2</b></td>
                    <td><b>.</b></td>
                    <td><b>Nama #2</b></td>
                    <td>(HP</td>
                    <td>: 081x-xxxx-xxxx</td>
                    <td>, email</td>
                    <td>: asdf@tes.com</td>
                    <td>)</td>
                </tr>
                <tr id="comDesc">
                    <td><b>3</b></td>
                    <td><b>.</b></td>
                    <td><b>Nama #3</b></td>
                    <td>(HP</td>
                    <td>: 081x-xxxx-xxxx</td>
                    <td>, email</td>
                    <td>: asdf@tes.com</td>
                    <td>)</td>
                </tr>
                <tr id="comDesc">
                    <td><b>4</b></td>
                    <td><b>.</b></td>
                    <td><b>Nama #4</b></td>
                    <td>(HP</td>
                    <td>: 081x-xxxx-xxxx</td>
                    <td>, email</td>
                    <td>: asdf@tes.com</td>
                    <td>)</td>
                </tr>
            </table>
        </div>
        <br/><br/>
        <div id="formBox">
            <form action="" method="post" id="formInput">
                <table>
                    <tr>
                        <td>Container Num.</td>
                        <td>:</td>
                        <td><input type="text" placeholder="XXXX0000000" name="contNum" id="contNum" /></td>
                        <td><input type="button" value="Load Photo" onclick="loadPhoto()" /></td>
                    </tr>
                </table>
            </form>
        </div>
        <div id="upload">
            <form action="" method="post">
                <input type="button" value="Upload Image" onclick="loadUploader()">
            </form>
        </div>
        <div id="photoArea">
            <div id="dmPhoto" class="column column-offset-1">
            </div>
            <div id="avPhoto" class="column column-offset-2">
            </div>
        </div>
    </body>
</html>