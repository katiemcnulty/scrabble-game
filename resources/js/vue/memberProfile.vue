<template>
<div>

    <!-- Button trigger modal -->
            <button type="button" class="btn " data-toggle="modal" :data-target="'#viewProfileModal' + member.id">
                View Profile 
            </button>

    <!-- Modal -->
            <div class="modal fade" :id="'viewProfileModal' + member.id" tabindex="-1" role="dialog" :aria-labelledby="'viewProfileLabel' + member.id"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" :id="'viewProfileLabel' + member.id">Profile Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body member-profile">
                            <h1>{{ member.name }}</h1>
                            <h2>{{member.email}}</h2>
                            <hr>
                            <p>Number of wins: {{member.wins}} </p>
                            <p>Number of loses: {{member.loses}}</p>
                            <hr>
                            <p>Average Score: {{member.averageScore}}</p>
                            <p>Highest Score: {{member.highScore}} </p>
                            <hr>
                            <p>Best Game: {{member.bestPlayer}} @ {{member.bestGameTime}}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-close" data-dismiss="modal" ref="close">Close</button>                            
                        </div>
                    </div>
                </div>
            </div>
    
</div>
</template>

<script>
export default {
    props: ['member'],
}
</script>

<style scoped>
.member-profile h1, h2, p {
    display: flex;
    justify-content: center;
}

</style>