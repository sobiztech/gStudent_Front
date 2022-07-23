(()=>{"use strict";!function(){$("#members-table").DataTable({language:{searchPlaceholder:"Search...",sSearch:""},pageLength:10}),$("#tasks-table").DataTable({language:{searchPlaceholder:"Search...",sSearch:""},pageLength:10}),$("#timetracking-table").DataTable({language:{searchPlaceholder:"Search...",sSearch:""},pageLength:10}),$("#tickets-table").DataTable({language:{searchPlaceholder:"Search...",sSearch:""},pageLength:10}),$("#billing-table").DataTable({language:{searchPlaceholder:"Search...",sSearch:""},pageLength:10}),$("#projectfiles-table").DataTable({language:{searchPlaceholder:"Search...",sSearch:""},pageLength:10});var e=$("#task-file-input"),t=e.next("label").find("span"),a=$("i.remove"),n=t.text();function s(e){return e.id?$('<span><img src="http://127.0.0.1:8000/assets/images/users/'+e.element.value.toLowerCase()+'.jpg" class="rounded-circle avatar-sm" /> '+e.text+"</span>"):e.text}function r(e){return e.id?$('<span><img src="http://127.0.0.1:8000/assets/images/users/'+e.element.value.toLowerCase()+'.jpg" class="rounded-circle avatar-sm" /> '+e.text+"</span>"):e.text}function c(e){if(!e.id)return e.text;var t=$('<span class="status-indicator projects">'+e.text+"</span>"),a=t.text().split(" ").join("").toLowerCase();return"inprogress"===a?t.addClass("in-progress"):"onhold"===a?t.addClass("on-hold"):"completed"===a?t.addClass("completed"):t.addClass("empty"),t}function l(e){if(!e.id)return e.text;var t=$('<span class="status-indicator tickets">'+e.text+"</span>"),a=t.text().split(" ").join("").toLowerCase();return"open"===a?t.addClass("open"):"closed"===a?t.addClass("closed"):"pending"===a?t.addClass("pending"):"resolved"===a?t.addClass("resolved"):t.addClass("empty"),t}function i(e){if(!e.id)return e.text;var t=$('<span class="status-indicator invoice-bill">'+e.text+"</span>"),a=t.text().split(" ").join("").toLowerCase();return"paid"===a?t.addClass("paid"):"unpaid"===a?t.addClass("unpaid"):"overdue"===a?t.addClass("overdue"):t.addClass("empty"),t}e.on("change",(function(s){var r=e.val().split("\\").pop();r?(t.text(r),a.show()):(t.text(n),a.hide())})),a.on("click",(function(s){e.val(""),t.text(n),a.hide(),console.log(e)})),$(".select2").select2({minimumResultsForSearch:1/0,width:"100%"}),$(".select2-show-search").select2({minimumResultsForSearch:"",width:"100%"}),$(".select2-agent-search").select2({templateResult:s,templateSelection:s,escapeMarkup:function(e){return e}}),$(".select2-client-search").select2({templateResult:r,templateSelection:r,escapeMarkup:function(e){return e}}),$(".select2-status-search").select2({templateResult:c,templateSelection:c,escapeMarkup:function(e){return e}}),$(".ticket-status-search").select2({templateResult:l,templateSelection:l,escapeMarkup:function(e){return e}}),$(".invoice-status-search").select2({templateResult:i,templateSelection:i,escapeMarkup:function(e){return e}}),$(".bootstrapDatePicker1").datepicker({autoclose:!0,format:"dd-mm-yyyy",todayHighlight:!0}).datepicker("update","11-01-2021"),$("#bootstrapDatePicker2").datepicker({autoclose:!0,format:"dd-mm-yyyy",todayHighlight:!0}).datepicker("update","11-11-2021")}(),function(){var e=document.querySelectorAll(".reply a"),t=document.createElement("div");t.setAttribute("class","comment mt-5 d-grid w-60");var a=document.createElement("textarea");a.setAttribute("class","form-control"),a.setAttribute("rows","5"),a.innerText="Your Comment";var n=document.createElement("button");n.setAttribute("class","btn btn-danger"),n.innerText="Cancel";var s=document.createElement("div");s.setAttribute("class","btn-list ms-auto mt-2");var r=document.createElement("button");r.setAttribute("class","btn btn-success ms-3"),r.innerText="Submit",t.append(a),t.append(s),s.append(n),s.append(r),e.forEach((function(e,a){e.addEventListener("click",(function(){$(e).parent().append(t),n.addEventListener("click",(function(){t.remove()}))}))}))}(),function(){var e=document.querySelectorAll("#star");if(e)for(var t=function(e){var t=e.target;t.classList.contains("active")?t.classList.remove("active"):t.classList.add("active")},a=0;a<e.length;a++)e[a].addEventListener("click",t)}();var e=document.querySelector(".sub-list-container");if(e){var t=function(t){e.removeChild(t.target.parentElement)},a=document.querySelector(".sub-list-item"),n=document.querySelector("#addTask"),s=document.querySelector("#subTaskInput"),r=document.querySelector("#errorNote"),c=document.querySelector("#deleteAllTasks"),l=document.querySelector("#completedAll");setTimeout((function(){setInterval((function(){for(var e=document.querySelectorAll(".delete-main"),a=0;a<e.length;a++)e[a].addEventListener("click",t)}),10)}),1);var i=0,o=a.cloneNode(!0);l.addEventListener("click",(function(){var t=e.children;if(i%2!=0)for(var a=0;a<t.length;a++)t[a].classList.remove("task-completed");else for(var n=0;n<t.length;n++)t[n].classList.add("task-completed");i++})),c.addEventListener("click",(function(){e.innerHTML=" "})),n.addEventListener("click",(function(){r.innerText="";var t=o.cloneNode(!0);t.classList.remove("task-completed");var a=s.value;0!==a.length?(e.appendChild(t),t.children[0].children[1].innerText=a,s.value=""):r.innerText="Please Enter Valid Input"}))}!function(e,t){var a=t.classList;e.addEventListener("click",(function(){a.contains("d-none")?t.classList.remove("d-none"):t.classList.add("d-none")}))}(checkElement,mainElement)})();