import axios from "axios";

const baseUrl = "https://localhost:44386/api/";

export default{
    FSMDatabase(url= `${baseUrl  }auth/login?`){
        return {
            fetchAuth : () => axios.get(url),
            fetchbyId : id => axios.get(url + id),
            create : newRecord => axios.post(url, newRecord),
            update : (id, updateRecord) => axios.put(url + id,updateRecord),
            delete : id => axios.delete(url,id)
        }
    }
}