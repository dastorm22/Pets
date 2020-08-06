<template>
    <div className="container">
       <div class="row justify-content-center">
            <div class="col-lg-8">
                <postslist></postslist>
            </div>

        </div>
           <footer class="fixed-bottom">

                <div class="container">

                   <div class="row justify-content-center">

                        <div class="col-lg-8 d-flex justify-content-between">

                            <div class="home">

                                <a href="/home"><i class="fas fa-home"></i></a>

                            </div>

                           <uploadbutton></uploadbutton>

                        </div>

                   </div>

                </div>

            </footer>

        <uploadmodal></uploadmodal>

    </div>
</template>

<script>
import UploadButton from './UploadButton.vue'
import UploadModal from './UploadModal.vue'
import PostsList from './PostsList.vue'


export default {
  name: 'app',
  components: {
    uploadbutton: UploadButton,
    uploadmodal: UploadModal,
    postslist: PostsList


  }
}
</script>
