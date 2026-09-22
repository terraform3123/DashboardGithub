import axios from "axios";

import axios from "axios";

async function buscarUsuario() {
    try {
        const response = await axios.get(
            "http://127.0.0.1:8000/usuario/LucasRRibeiro"
        );

        console.log("Resposta:", response.data);

        const resultado = document.getElementById("resultado");

        if (!resultado) {
            console.error("Elemento #resultado não encontrado!");
            return;
        }

        resultado.textContent = JSON.stringify(response.data, null, 2);

    } catch (error) {
        console.error("Erro na requisição:", error);
    }
}

buscarUsuario();
