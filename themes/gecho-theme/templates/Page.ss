<html>
	<head>
		<% base_tag %>
		$MetaTags
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=0">
		<link rel="stylesheet" href="$ThemeDir/css/foundation.css"/>
		<link rel="stylesheet" href="$ThemeDir/css/style.css"/>
	</head>

	<body>
		<div class="banner">
			<div class="row edge">
				<div class="large-6 columns">
					<h1 style="color: white; padding: 0;">Gecho</h1>
					<div style="color: white; padding: 0;">$Title</div>
				</div>
				<div class="large-6 columns">
					<div class="row menu menu-centered float-right">
						<% loop $Menu(1) %>
							<a href="$Link" style="color: white; padding-left: .5rem; padding-right:.5rem; text-align: center;">$MenuTitle</a>
						<% end_loop %>

						<a href="{$BaseHref}login">
							<% if $LoggedIn %>Log Out<% else %>Log In<% end_if %>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="edge content">
			<p>$Layout</p>
		</div>
	</body>
</html>