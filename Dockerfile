FROM python:3.11

WORKDIR /app

COPY . .

RUN pip install fastapi uvicorn dask[complete] pymysql sqlalchemy pyarrow

EXPOSE 8123

CMD ["uvicorn", "main:app", "--host", "0.0.0.0", "--port", "8123"]
