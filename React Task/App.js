import "./App.css";
import { getData } from "./getData";

function App() {
    getData(1).then((res) => console.log(res.getUser.data, res.getPost.data));

    return <div className="App"></div>;
}

export default App;