<!DOCTYPE html> 
<html> 
    <head> 
        <title>Просмотр таблицы</title> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head> 
    <body> 

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-7" style="position: relative;box-shadow: 0px 0px 5px 2px #436280;">




                    <h1 class="d-flex justify-content-center">Таблица</h1>
                    <div class="col-sm-12 table">
                        <ul class="list-group list-group-horizontal">
                            <li class="col-sm-1 list-group-item d-flex justify-content-center">Id</li>
                            <li class="col-sm-3 list-group-item d-flex justify-content-center">Фамилия</li>
                            <li class="col-sm-2 list-group-item d-flex justify-content-center">Имя</li>
                            <li class="col-sm-3 list-group-item d-flex justify-content-center">Отчество</li>
                            <li class="col-sm-1 list-group-item d-flex justify-content-center">Возраст</li>
                        </ul>

                        <?php
                        foreach ($sth as $row) {
                            ?>
                            <ul class="list-group list-group-horizontal">
                                <li class = "col-sm-1 list-group-item d-flex justify-content-center">
                                    <?= $row['id']; ?>
                                </li>
                                <li class="col-sm-3 list-group-item d-flex justify-content-center">
                                    <?= $row['surname']; ?>
                                </li>
                                <li class="col-sm-2 list-group-item d-flex justify-content-center">
                                    <?= $row['name']; ?>
                                </li>
                                <li class="col-sm-3 list-group-item d-flex justify-content-center">
                                    <?= $row['patronymic']; ?>
                                </li>
                                <li class="col-sm-1 list-group-item d-flex justify-content-center">
                                    <?= $row['age']; ?>
                                </li>
                                <li class="d-flex justify-content-center">
                                    <a href="/?act=form&id=<?= $row['id']; ?>">UPD</a>
                                </li>
                                <li class="d-flex justify-content-center">
                                    <a href="/?act=delete&id=<?= $row['id']; ?>">DEL</a>
                                </li>
                            </ul>
                            <?php
                        }
                        ?>
                    </div>


                    <div class="row inp">
                        <a href="/?act=form" style="cursor: pointer" class="col-sm-6">Ввод данных</a>
                    </div>

                    <br>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 


    </body> 
</html>
