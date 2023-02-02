const express = require("express");
const app = express();
const cors = require("cors")
const noteRouter = require("./routes/noteRoutes");
const userRouter = require('./routes/userRoutes');
const dotenv = require ("dotenv");

dotenv.config();

const mongoose = require("mongoose")



app.use(express.json());

app.use(cors());

app.use("/notes",noteRouter)

app.use("/users",userRouter)

app.get ("/",(req,res)=>
{
    res.send("Notes Api Learn For Kotlin ")
})


const mongoUrl="mongodb+srv://admin:admin@cluster0.gerptzr.mongodb.net/notes_db?retryWrites=true&w=majority"
const PORT = process.env.PORT || 4500;

mongoose.connect(mongoUrl)
.then(()=>{
    app.listen(PORT, ()=>{
        console.log("Server started on port no. " + PORT);
    });
})
.catch((error)=>{
    console.log(error);
})
