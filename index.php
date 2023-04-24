<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList-Json</title>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.6/axios.min.js"></script>
</head>
<body>

    <div id="app">

    <ul>
        <li v-for="SingleActivity in activities">
            {{SingleActivity.activity}}
        </li>
    </ul>

    <input v-model="newActivity" type="text" placeholder="Enlist Activity">
    <button @click="addActivity()">Add</button>


    </div>


    <script src="js/script.js"></script>
</body>
</html>