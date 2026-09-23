from pydantic import BaseModel
from typing import Optional

class Dados(BaseModel):
    login: str
    nome: Optional[str] = None
    qtd_repositorios_publicos: int = 0
    seguidores: int = 0
    seguindo: int = 0
    bio_user: Optional[str] = None
    avatar_user: str