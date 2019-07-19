var data = {
    "name":"nouman",
    "age":12,
    "numbers":[1,2,3,4],
    "other": {"k1":"v1"}
};

function send_data(){
    window.location = "json.php?x="+ JSON.stringify(data);
}
