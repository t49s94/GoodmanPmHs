<template>

<!--
Developer: Sergio Eduardo Santillana Lopez.
Last update: 15/04/2021.

This file contains FollowButton component. Toggles follow - unfollow when User clicks on it.
-->

<div class="d-flex justify-content-around">
  <div>
    <label class="col-form-label">Id</label>
    <input id="testimonial_id" type="text" class="form-control" name="testimonial_id" value="" placeholder="Example: 1234">
  </div>

  <div>
    <label class="col-form-label">Customer's Id</label>
    <input id="customer_id" type="text" class="form-control" name="customer_id" value="" placeholder="Example: 1234">
  </div>

  <div>
    <label class="col-form-label">Name</label>
    <input id="customer_name" type="text" class="form-control" name="customer_name" value="" placeholder="Example: Jon Goodman">
  </div>

  <div>
    <label class="col-form-label">Body</label>
    <input id="testimonial_body" type="text" class="form-control" name="testimonial_body" value="" placeholder="Example: abcd">
  </div>

  <div>
    <label class="col-form-label">Importance</label>
    <input id="testimonial_importance" type="text" class="form-control" name="testimonial_importance" value="" placeholder="Example: 1234">
  </div>

  <div>
    <label class="col-form-label">Created at (from)</label>
    <input id="testimonial_created_at_from" type="text" class="form-control" name="testimonial_importance" value="" placeholder="Example: 1234">
  </div>

  <button class="btn btn-primary">Search</button>

</div>

</template>

<script>
  export default {
    props: ['userId', 'follows'],

    mounted() {
      console.log('Component mounted.')
    },

    data: function() {
      return {
          status: this.follows,
      }
    },

    methods: {
      // Executes Ajax functions that makes User follows or unfollows Profile
      // @return String.
      followUser()
      {
        axios.post('/follow/' + this.userId)
          .then(response => {
            this.status = ! this.status;
            console.log(response.data);
          })
          .catch(errors => {
            if(errors.response.status == 401)
            {
                window.location = '/login';
            }
          });
      }
    },

    computed: {
      // Gets button's text
      // @return String.
      buttonText() {
          return (this.status) ? 'Unfollow' : 'Follow';
      }
    }
  }
</script>
