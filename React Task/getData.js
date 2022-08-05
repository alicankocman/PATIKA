import axios from "axios";

export const getData = async (userId) => {
    const getUser = await axios(
        "https://jsonplaceholder.typicode.com/users/" + userId
    );
    const getPost = await axios(
        "https://jsonplaceholder.typicode.com/posts?userId=" + userId
    );

    return { getUser, getPost };
};