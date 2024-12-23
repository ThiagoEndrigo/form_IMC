<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do IMC</title>
    <script>
        function calcularIMC() {
            const nome = document.getElementById('nome').value;
            const peso = parseFloat(document.getElementById('peso').value);
            const altura = parseFloat(document.getElementById('altura').value);

            if (!nome || !peso || !altura) {
                alert("Por favor, preencha todos os campos!");
                return;
            }

            const imc = (peso / (altura * altura)).toFixed(2);
            let faixa;

            if (imc < 18.5) {
                faixa = "abaixo do peso";
            } else if (imc >= 18.5 && imc <= 24.9) {
                faixa = "com peso normal";
            } else if (imc >= 25 && imc <= 29.9) {
                faixa = "com sobrepeso";
            } else if (imc >= 30 && imc <= 34.9) {
                faixa = "com obesidade grau I";
            } else if (imc >= 35 && imc <= 39.9) {
                faixa = "com obesidade grau II";
            } else {
                faixa = "com obesidade grau III (mórbida)";
            }

            const resultado = `
                <h1>RESULTADO DO IMC</h1>
                <p>Peso: ${peso} kg</p>
                <p>Altura: ${altura} m</p>
                <p>IMC: ${imc}</p>
                <p>${nome}, você está ${faixa}.</p>
            `;
            document.getElementById('resultado').innerHTML = resultado;
        }
    </script>
</head>
<body>
    <h1>CÁLCULO DO IMC</h1>
    <form onsubmit="event.preventDefault(); calcularIMC();">
        Nome: <input type="text" id="nome" required><br><br>
        Peso (kg): <input type="number" id="peso" step="0.01" required><br><br>
        Altura (m): <input type="number" id="altura" step="0.01" required><br><br>
        <button type="submit">CALCULAR</button>
        <button type="reset">LIMPAR</button>
    </form>
    <div id="resultado"></div>
</body>
</html>
