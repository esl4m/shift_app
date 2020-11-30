
import React from 'react';

import styles from './questions.css';
import { fetchQuestions } from '../services/questions';

export default function() {
  return (
    <div className={styles.normal}>
      <h1>Page questions</h1>
    </div>
  );
}
