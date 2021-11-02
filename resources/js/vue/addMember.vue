<template>
    <div class="addMember">
        <input type="text" placeholder="Enter Name">
        <input type="email" placeholder="Enter Email">
        <button>Add Member</button>
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
    color: #fffffe;
    background-color: #7f5af0;
    padding: 0.5em;
}

</style>