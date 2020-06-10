import api from "./api";

export const ACTION_TYPES = {
    LOGIN : 'LOGIN' ,
    CREATE : 'CREATE',
    UPDATE : 'UPDATE',
    DELETE : 'DELETE',
    FETCH_ALL : 'FETCH_ALL'
}

export const fetchAll = () => dispatch  => {
    api.FSMDatabase().fetchAll()
    .then(
        response => {
            dispatch({
                type : ACTION_TYPES.fetchAll,
                payload: response.data
            })
        })
        .catch(err => console.log(err))
}
