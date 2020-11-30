import React from 'react';
import styles from './index.css';

export default function() {
  return (
    <div className={styles.normal}>
      <div className={styles.welcome} />
      <h1>SHIFT - Technical Interview Challenge</h1>
      <ul className={styles.list}>
        <li>To get your exam started</li>
        <li>
          <a href="/questions"> Click here </a>
        </li>
      </ul>
    </div>
  );
}
