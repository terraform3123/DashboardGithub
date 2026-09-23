import os
from github import Github, UnknownObjectException
from dotenv import load_dotenv

load_dotenv()
git_api = Github(os.environ.get("GITHUB_TOKEN"))
error_not_user = UnknownObjectException
