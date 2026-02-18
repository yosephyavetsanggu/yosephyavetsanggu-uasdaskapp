from fastapi import FastAPI
import dask.dataframe as dd

app = FastAPI()

connection_string = "mysql+pymysql://root:@localhost/uasdb"

@app.get("/list")
def list_data():

    ddf = dd.read_sql_table(
        table_name="daily_prayers",
        con=connection_string,
        index_col="id",
        npartitions=2
    )

    result = ddf.compute().to_dict(orient="records")
    return result
