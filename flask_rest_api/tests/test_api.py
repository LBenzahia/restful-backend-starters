from requests import get, post, put, delete
get("http://127.0.0.1:5000/api")
data = {"name": "Example Name", "registration": "123433199", "department": "cse"}
post("http://127.0.0.1:5000/api", json=data).json()
put("http://127.0.0.1:5000/api/123433199", json={"website": "www.example.com"}).json()
delete("http://127.0.0.1:5000/api/123433199").json()
