<template>
<div class="addMember">
    <!-- Button trigger modal -->
<button type="button" class="btn " data-toggle="modal" data-target="#exampleModal">
  Add Member
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label for="name">Name: <input type="text" placeholder="Enter Name"></label>
        <label>Email: <input type="email" placeholder="Enter Email"></label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn " data-dismiss="modal">Close</button>
        <button type="button" class="btn ">Add Member</button>
      </div>
    </div>
  </div>
</div>
</div>




</template>
<script>
    export default {

    }

</script>

<style scoped>
    .addMember {
        margin-top: 1em;
        display: flex;
        justify-content: center;
        align-items: center;
        
    }

    .addMember input {
        border: 1px #94a1b2 solid;
        margin: 1em;
        padding: 0.5em;
    }

    button {
        justify-content: center;
        align-items: center;
        background-color: #7f5af0;
        color: #fffffe;
        opacity: 0.8;
        transition: 0.4s;
    }
    button:hover {
        background-color: #2cb67d;
        opacity: 1;
        
    }
    .modal {
        color: #16161a;
        background-color: #72757e;
    }

    

</style>
