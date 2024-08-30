<?php include 'header.php';
$mesaj = $db->getRows("SELECT * FROM tbmessages ORDER BY message_date DESC");

?>
    <div class="container">
        <h4><a href="mesaj-ekle.php">
            </a> MESAJLAR
        </h4>

        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Gönderen Ad Soyad</th>
                <th>Gönderen Mail</th>
                <th>Telefon Numarası</th>
                <th>Mesaj</th>
                <th>Tarih</th>
                <th>Sil</th>
            </tr>
            </thead>

            <tbody>

            <?php foreach ($mesaj

            as $mesajgetir){ ?>
            <tr>
                <td><?php echo $mesajgetir['message_name'] . ' ' . $mesajgetir['message_surname'] ?></td>
                <td><?php echo $mesajgetir['message_mail'] ?></td>
                <td><?php echo $mesajgetir['message_phone'] ?></td>
                <td><?php echo $mesajgetir['message_detail'] ?></td>
                <td><?php echo $mesajgetir['message_date'] ?></td>
                <td align="center"><button onclick="deleteMessage(<?=$mesajgetir['message_id']?>)" class=" btn btn-danger"><i class="fa fa-trash"></i></button></td>

                <?php } ?>

            </tbody>
        </table>

    </div>

<?php include 'footer.php' ?>