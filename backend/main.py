from fastapi import FastAPI
from usuario_routes import router as router_usuario

app = FastAPI(title="GITIEADWDS")

app.include_router(router_usuario)