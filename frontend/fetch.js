import axios from "axios";

try {
    const response = await axios.get("http://127.0.0.1:8000/usuario/Lucas0M");

    console.log(response.data);
} catch (error) {
    console.log(error);
}