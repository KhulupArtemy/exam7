function showDetails(film) {
    let isShow = confirm("Вы хотите посмотреть подробну информацию?");

    if (isShow) {
        const filmName = film;
        set_cookie("filmName",filmName, 20223, 02, 23);
        //window.location.href = 'index2.php';
    } else {
        alert('NO')
    }
}

