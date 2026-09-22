from pydantic import BaseModel

class Dados(BaseModel):
    login: str
    nome: str
    qtd_repositorios_publicos: int
    seguidores: int
    seguindo: int
    bio_user: str
    avatar_user: str