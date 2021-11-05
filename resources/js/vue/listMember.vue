<template>
    <div>
        <div class="member">
            <span class="name">{{ member.name }}</span>
            <span class="email">{{ member.email }} </span>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['member'],

    }

</script>

<style scoped>
.member {
    background-color: #fffffe;
    color: #16161a;
    border-radius: 1em;
    width: 100%;
    display: flex;
    justify-content: space-around;
}

</style>
