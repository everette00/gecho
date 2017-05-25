<div>
	<% loop $Children %>
		<div style="border: solid 1px #909090; border-radius: .5rem; padding: 1rem; margin-top: 1rem;">
			<div>$Title</div>
			<div>$Content</div>
			<div style="width:200px; margin: 0 auto;">$Photo</div>
		</div>
	<% end_loop %>
</div>