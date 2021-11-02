<template>
    <div class="container">
        <div class="heading">
            <h1>Members</h1>
        </div>
        <add-member />
    </div>

</template>

<script>
    import addMember from "./addMember.vue"

    export default {
        components: {
            addMember,
        },
    }

</script>

<style scoped>
    .container {
        background-color: #16161a;
        min-height: 100vh;
        min-width: 100vw;
        color: #fffffe;
    }

    .heading {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 2em;
    }

    .modal-backdrop {
        background-color: #16161a;
        opacity: 1;
    }

</style>
