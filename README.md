git-deploy-s3
=============

A CLI script that picks up changes to your git repo assets and deploys them 
to Amazon S3. 

The script takes two commit hashes, gets a list of files added/modified/deleted, 
and uploads them to S3 or deletes them from S3 as appropriate. Of course, you 
get to specify exactly which files and directories you would like this script to
work with and all other files will be ignored.

You can also choose to automatically compress JS and/or CSS files using
YUI Compressor before uploading to S3.

This script was built specifically to work with git's `post-receive` hook and
automate the deployment process. See the included `post-receive.sample`.

Usage
-----

Run the following from the root of your working copy.

	$ /path/to/git-deploy-s3 <oldrev> <newrev>

See `config.sample.php` for configuration options.

Installation
------------

1. Clone this repo
1. Copy `config.sample.php` to `config.php` and edit it as needed

Author
------

Brad Touesnard (http://bradt.ca)

License
-------

Copyright (c) 2012 Brad Touesnard 

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the 
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

