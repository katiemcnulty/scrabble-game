<template>
    <div>
        <!-- Button trigger modal -->
        <button type="button" class="btn " data-toggle="modal" :data-target="'#editMemberModal' + member.id">
            Edit
        </button>

        <!-- Modal -->
        <div class="modal fade" :id="'editMemberModal' + member.id" tabindex="-1" role="dialog" aria-labelledby="editMemberLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <!-- Modal header -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="editMemberLabel">Edit Member</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <label for="name">Edit Name: <input type="text" placeholder="Edit Name"
                                v-model="member.name"></label>
                        <label>Edit Email: <input type="email" placeholder="Edit Email" v-model="member.email"></label>

                    </div>

                    <!-- Modal Footer with buttons -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-close" data-dismiss="modal" ref="close">Close</button>
                        <button type="button" class="btn" @click="editMember()" >Edit Member</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</template>

<script>
    export default {
        props: ['orginalMember'],
        data: function () {
            return {
                member: {
                    name: '',
                    email: ''
                }
            }
        },
        created() {
            this.member = JSON.parse(JSON.stringify(this.orginalMember));
        },
        methods: {
            editMember() {
                axios.put('member/' + this.member.id, {
                        member: this.member
                    })
                    .then(respose => {
                        if (respose.status == 200) {
                            this.$refs.close.click();
                        }
                    })
                    .catch(error => {
                        console.log(error);
                    })
            },
        }


    }

</script>

<style scoped>

</style>
