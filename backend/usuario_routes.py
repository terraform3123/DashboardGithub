import os
from fastapi import APIRouter
from github import Github, UnknownObjectException

router = APIRouter()
g = Github(os.environ.get("GITHUB_TOKEN"))

@router.get("/usuario/{usuario_id}")
def buscar_usuario(usuario_id: str):
    try:
        usuario = g.get_user(usuario_id)
        return {
            "login": usuario.login,
            "nome": usuario.name,
            "seguidores": usuario.followers
        }
    except UnknownObjectException:
        return {"erro": "Usuário não encontrado"}
