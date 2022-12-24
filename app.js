function talk() {
    var know = {
        "Who are you": "Hello, Codewith_random here ",
        "How are you": "Good :)",
        "What can i do for you": "Search CodeWithRandom on Google>>Thank Me Later",
        "Your followers":
            "I have my family of 200000 members, i don't have follower ,have supportive Famiy ",
        ok: "Thank You So Much ",
        Bye: "Okay! Will meet soon..",
    };
    var user = document.getElementById("userBox").value;
    document.getElementById("chatLog").innerHTML = user + "<br>";
    if (user in know) {
        document.getElementById("chatLog").innerHTML = know[user] + "<br>";
    } else {
        document.getElementById("chatLog").innerHTML =
            "Sorry,I didn't understand <br>";
    }
}

