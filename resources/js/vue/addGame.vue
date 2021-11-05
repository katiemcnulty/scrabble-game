<template>
    <div>
        <div class="addGame">

            <button type="button" class="btn " data-toggle="modal" data-target="#addGameModal">
                Add Game
            </button>

            <!-- Modal -->
            <div class="modal fade" id="addGameModal" tabindex="-1" role="dialog" aria-labelledby="addGameLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addGameLabel">Record New Game</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label for="name">Name: <input type="text" placeholder="Enter Name"
                                    ></label>
                            <label>Email: <input type="email" placeholder="Enter Email"></label>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-close" data-dismiss="modal">Close</button>
                            <button type="button" class="btn ">Add Member</button>
                        </div>
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
    .addGame {
        
        margin: 1em;
        display: flex;
        justify-content: center;
        align-items: center;
        border: #2cb67d 2px solid;
        border-radius: 0.5em;

    }
    .modal {
        color: #16161a;
        background-color: #72757e;
    }

    .close:hover,
    .btn-close:hover {
        background-color: #f05a73;
        color: #fffffe;
        opacity: 1;

    }

</style>
