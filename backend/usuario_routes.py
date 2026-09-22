from fastapi import APIRouter
from github_service import git_api, error_not_user

router = APIRouter()

@router.get("/usuario/{usuario_id}")
def buscar_usuario(usuario_id: str):
    try:
        usuario = git_api.get_user(usuario_id)
        return {
            "login": usuario.login,
            "nome": usuario.name,
            "qtd_repositorios_publicos": usuario.public_repos,
            "seguidores": usuario.followers,
            "seguindo": usuario.following,
            "bio_user": usuario.bio,
            "avatar_user": usuario.avatar_url
        }
    except error_not_user:
        return {"erro": "Usuário não encontrado"}
