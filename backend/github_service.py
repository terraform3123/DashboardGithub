import os
from github import Github, UnknownObjectException

git_api = Github(os.environ.get("GITHUB_TOKEN"))
error_not_user = UnknownObjectException