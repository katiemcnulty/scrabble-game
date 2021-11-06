<template>
    <div>
        <div class="member">
            <span class="name">{{ member.name }}</span>
            <span class="email">{{ member.email }} </span>

            <edit-member :orginal-member="member" />
            <member-profile :member="member" />
        </div>
    </div>
</template>

<script>
    import memberProfile from './memberProfile.vue'
    import editMember from './editMember.vue'
    export default {
        components: {
            memberProfile,
            editMember
        },
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
