<?php

/**
 * ReviewAssignment.inc.php
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package submission
 *
 * ReviewAssignment class.
 * Describes review assignment properties.
 *
 * $Id$
 */

class ReviewAssignment extends DataObject {

	/**
	 * Constructor.
	 */
	function ReviewAssignment() {
		parent::DataObject();
	}
	
	//
	// Get/set methods
	//
	
	/**
	 * Get ID of review assignment.
	 * @return int
	 */
	function getReviewId() {
		return $this->getData('reviewId');
	}
	
	/**
	 * Set ID of review assignment
	 * @param $reviewId int
	 */
	function setReviewId($reviewId) {
		return $this->setData('reviewId', $reviewId);
	}
	
	/**
	 * Get ID of article.
	 * @return int
	 */
	function getArticleId() {
		return $this->getData('articleId');
	}
	
	/**
	 * Set ID of article.
	 * @param $articleId int
	 */
	function setArticleId($articleId) {
		return $this->setData('articleId', $articleId);
	}
	
	/**
	 * Get ID of reviewer.
	 * @return int
	 */
	function getReviewerId() {
		return $this->getData('reviewerId');
	}
	
	/**
	 * Set ID of reviewer.
	 * @param $reviewerId int
	 */
	function setReviewerId($reviewerId) {
		return $this->setData('reviewerId', $reviewerId);
	}
	
	/**
	 * Get full name of reviewer.
	 * @return string
	 */
	function getReviewerFullName() {
		return $this->getData('reviewerFullName');
	}
	
	/**
	 * Set full name of reviewer.
	 * @param $reviewerFullName string
	 */
	function setReviewerFullName($reviewerFullName) {
		return $this->setData('reviewerFullName', $reviewerFullName);
	}
	
	/**
	 * Get reviewer comments.
	 * @return string
	 */
	function getComments() {
		return $this->getData('comments');
	}
	
	/**
	 * Set reviewer comments.
	 * @param $comments string
	 */
	function setComments($comments) {
		return $this->setData('comments', $comments);
	}
	
	/**
	 * Get reviewer recommendation.
	 * @return string
	 */
	function getRecommendation() {
		return $this->getData('recommendation');
	}
	
	/**
	 * Set reviewer recommendation.
	 * @param $recommendation string
	 */
	function setRecommendation($recommendation) {
		return $this->setData('recommendation', $recommendation);
	}
	
	/**
	 * Get the reviewer's assigned date.
	 * @return string
	 */
	function getDateAssigned() {
		return $this->getData('dateAssigned');
	}
	
	/**
	 * Set the reviewer's assigned date.
	 * @param $dateAssigned string
	 */
	function setDateAssigned($dateAssigned) {
		return $this->setData('dateAssigned', $dateAssigned);
	}
	
	/**
	 * Get the reviewer's notified date.
	 * @return string
	 */
	function getDateNotified() {
		return $this->getData('dateNotified');
	}
	
	/**
	 * Set the reviewer's notified date.
	 * @param $dateNotified string
	 */
	function setDateNotified($dateNotified) {
		return $this->setData('dateNotified', $dateNotified);
	}
	
	/**
	 * Get the reviewer's confirmed date.
	 * @return string
	 */
	function getDateConfirmed() {
		return $this->getData('dateConfirmed');
	}
	
	/**
	 * Set the reviewer's confirmed date.
	 * @param $dateConfirmed string
	 */
	function setDateConfirmed($dateConfirmed) {
		return $this->setData('dateConfirmed', $dateConfirmed);
	}
	
	/**
	 * Get the reviewer's completed date.
	 * @return string
	 */
	function getDateCompleted() {
		return $this->getData('dateCompleted');
	}
	
	/**
	 * Set the reviewer's completed date.
	 * @param $dateCompleted string
	 */
	function setDateCompleted($dateCompleted) {
		return $this->setData('dateCompleted', $dateCompleted);
	}
	
	/**
	 * Get the reviewer's acknowledged date.
	 * @return string
	 */
	function getDateAcknowledged() {
		return $this->getData('dateAcknowledged');
	}
	
	/**
	 * Set the reviewer's acknowledged date.
	 * @param $dateAcknowledged string
	 */
	function setDateAcknowledged($dateAcknowledged) {
		return $this->setData('dateAcknowledged', $dateAcknowledged);
	}
	
	/**
	 * Get the declined value.
	 * @return boolean
	 */
	function getDeclined() {
		return $this->getData('declined');
	}
	
	/**
	 * Set the reviewer's declined value.
	 * @param $declined boolean
	 */
	function setDeclined($declined) {
		return $this->setData('declined', $declined);
	}
	
	/**
	 * Get the replaced value.
	 * @return boolean
	 */
	function getReplaced() {
		return $this->getData('replaced');
	}
	
	/**
	 * Set the reviewer's replaced value.
	 * @param $replaced boolean
	 */
	function setReplaced($replaced) {
		return $this->setData('replaced', $replaced);
	}

}

?>
