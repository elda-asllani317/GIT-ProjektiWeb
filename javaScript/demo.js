
let btnn = document.getElementById("btnn"); 
let minipage = document.getElementById("minipage"); 
let spani = document.getElementById("spani"); 
let cardContainer = document.getElementById("cardContainer"); 
let btn = document.getElementById("btn"); 
let kryhet = document.getElementById("kryhet"); 
let writeInput = document.getElementById("mainInput"); 

btnn.addEventListener('click', () => {
  minipage.style.display = "block"; 
  writeInput.value = ""; 
  writeInput.disabled = false; 
  console.log("Modal opened");
  const previousTasks = minipage.querySelectorAll(".taskCard");
  previousTasks.forEach(task => task.remove());
});

spani.addEventListener('click', () => {
  minipage.style.display = 'none'; 
  writeInput.value = "";
  console.log("Modal closed");
});


function createTaskCard(taskName) {
 
  let thisCard = document.createElement("div");
  thisCard.classList.add("taskCard"); 
  thisCard.id="uniqueId"
  // Card content
  thisCard.innerHTML = `
    <div class="taskName">
                <h2>${taskName
                }</h2> 

                <details>
                <summary> <i class="fa-solid fa-ellipsis-vertical"></i></summary>
                 
                <h4><i class="fa-solid fa-plus"></i>Add task</h4>
                <h4> <i class="fa-solid fa-paperclip"></i>Attach</h4>
                <h4><i class="fa-solid fa-trash-can"></i> Delete</h4>
              </details>
              </div>
               <p>00:00:00/00:00:00</p>
              <progress class="progress" id="file" value="0" max="100"> 0% </progress>
              <label for="file">0%</label>
              <progress class="progress" id="file" value="0" max="100"> 0% </progress>
              <label for="file">0%</label>
              <progress class="progress" id="file" value="0" max="100"> 0% </progress>
              <label for="file">0%</label>
              <div class="works">
                <div class="avatar">
                  <img src="image/1.jpg" alt="" />
                  <img src="image/2.jpg" alt="" />
                  <img src="image/3.jpg" alt="" />
                  <img src="image/4.jpg" alt="" />
                </div>
                <div class="icon">
                  
          <button id="phpButon"><i class="fa-solid fa-plus"></i></i></button>
                </div>
              </div>
  `;
  return thisCard;
 saveDates()
}

btn.addEventListener('click', () => {
  const taskName = writeInput.value.trim();
  
  if (taskName === "") {
    alert("Please write something.");
    return;
  }

  const previousTasks = minipage.querySelectorAll(".taskCard");
  previousTasks.forEach(task => task.remove());

  const modalContent = createTaskCard(taskName);

  minipage.appendChild(modalContent);

 
});

kryhet.addEventListener('click', () => {
  const taskName = writeInput.value.trim();
  
  if (taskName === "") {
    alert("No task to add.");
    return;
  }

  const taskCard = createTaskCard(taskName);
  cardContainer.appendChild(taskCard);

  minipage.style.display = 'none';
  console.log("Task added and modal closed");
  
});



  