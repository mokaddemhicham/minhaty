$("#lert").click(function() {

    var cne = $("#cne").val();
    var anbac = $("#selectElementId").val();
    var type = $("#type").val();

    if (cne == "" || cne.length < 10) {
        Swal.fire(
            '<i style="font-size:20px;">Saisissez votre Cne ou Code massar</i>',
            '<i style="color:#7066e0;">Contient 10 caractères<br>exemple &nbsp;:&nbsp; 1312345678 ou X123456789</i>',
            'question'
        );
        return false;
    } else if (anbac == 0) {
        Swal.fire(
            '<i style="font-size:20px;">Sélectionnez votre Année du Bac</i>',
            '<i style="color:#7066e0;">Exemple : 2022 </i>',
            'question'
        );
        return false;
    } else if (type == 0) {
        Swal.fire(
            '<i style="font-size:20px;">Sélectionnez votre Cycle d\'étude </i>',
            '<i style="color:#7066e0;">1er Cycle / Master / Doctorat</i>',
            'question'
        );
        return false;
    } else {

        let timerInterval
        Swal.fire({
            title: 'redirection',
            html: 'aprés <b></b> milliseconds.',
            timer: 500,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft()
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {

            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('***************')
            }
        })

    }



});