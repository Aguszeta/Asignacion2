function generateYearList() {
    const inicioAño = document.getElementById('inicioAño').value;
    const finAño = document.getElementById('finAño').value;

    if (!inicioAño || !finAño) {
        alert("Por favor, ingresar ambos años");
        return;
    }

    fetch('script.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            inicioAño: parseInt(inicioAño),
            finAño: parseInt(finAño)
        })
    })
    .then(response => response.text())
    .then(data => {
        console.log("Datos recibidos del servidor:", data); 
        document.getElementById('lista').innerHTML = data;
    })
    .catch(error => console.error('Error : ', error));
}
