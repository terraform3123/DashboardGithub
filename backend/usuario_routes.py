from fastapi import APIRouter
from github_service import git_api, error_not_user
from models import Dados


router = APIRouter()

@router.get("/usuario/{usuario_id}", response_model=Dados)
def buscar_usuario(usuario_id: str):
    try:
        user = git_api.get_user(usuario_id)
        return {
            "login":user.login,
            "nome":user.name,
            "qtd_repositorios_publicos":user.public_repos,
            "seguidores":user.followers,
            "seguindo":user.following,
            "bio_user":user.bio,
            "avatar_user":user.avatar_url
        }
    except error_not_user:
        return {"erro": "Usuário não encontrado"}
