const hS = document.getElementById("historySubject");
const hT = document.getElementById("historyTopic");
const sW = document.getElementById("subjects-wrapper");
const tW = document.getElementById("topics-wrapper");

hS.addEventListener("click", () => {
    hS.classList.toggle("opacity-d5");
    hT.classList.add("opacity-d5");
    sW.classList.remove("hidden");
    tW.classList.add("hidden");
});

hT.addEventListener("click", () => {
    hT.classList.toggle("opacity-d5");
    hS.classList.add("opacity-d5");
    sW.classList.add("hidden");
    tW.classList.remove("hidden");
});
