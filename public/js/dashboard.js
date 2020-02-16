new Chart(document.getElementById("chartjs-4"), {
    "type": "doughnut",
    "data": {
        "labels": ["Red", "Blue", "Yellow"],
        "datasets": [{
            "label": "Contents",
            "data": [300, 50, 100],
            "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
        }]
    }
});