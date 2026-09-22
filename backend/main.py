from fastapi import FastAPI
from usuario_routes import router as router_usuario
from fastapi.middleware.cors import CORSMiddleware

app = FastAPI(title="GITHUB_DASHBOARD")
app.add_middleware(
    CORSMiddleware,
    allow_origins=["http//localhost:3000"],
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"]
)

app.include_router(router_usuario)