<?php
/**
 * ownCloud - Core
 *
 * @author Raghu Nayyar
 * @copyright 2013 Raghu Nayyar <raghu.nayyar.007@gmail.com>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
?>
<ul ng-controller="grouplist">
	<li class="user-groups" id="everyone">
		<a href="#"><?php p($l->t('Everyone')); ?></a>
	</li>
	<li class="user-groups" ng-repeat="groupname in groupnames | orderBy:['isAdmin','name']">
		<a ng-href="users/group/{{ groupname.groupid }}" ng-click="switchgroup(groupname.groupid)">{{ groupname.name }}</a>
		<span class="utils">
			<span class="usercount">{{ groupname.useringroup.length }}</span>
			<button class="svg action delete-icon delete-button" ng-click="deletegroup(groupname.name)"></button>
		</span>
	</li>
</ul>