function setCommunication(form){
    const file = 'db-transactions/communication-transactions.php';
    $.ajax({
        url: file,
        type: 'POST',
        data: $(form).serialize()
    })
}